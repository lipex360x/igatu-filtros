export default {
  description: 'Generate Component',

  prompts: [
    {
      type: 'input',
      name: 'componentName',
      message: 'Component Name',
      validate: (value: string) => (!value ? 'Value is required' : true),
    },   
  ],

  actions: () => {
    const basePath = '../src/components/{{componentName}}'
    const templatePath = './components/templates'

    const setFiles = () => {
      const files = []
      
      files.push({
        type: 'add',
        path: `${basePath}/index.php`,
        templateFile: `${templatePath}/index.hbs`,
      })

      files.push({
        type: 'add',
        path: `${basePath}/{{componentName}}.php`,
        templateFile: `${templatePath}/component.hbs`,
      })

      return files
    }

    const action = [] as any

    setFiles().forEach(({ path, templateFile }) => {
      const createFile = {
        type: 'add',
        path,
        templateFile,
        force: true,
      }

      action.push(createFile)
    })

    const updateFile = {
      type: 'append',
      path: `${basePath}/../index.php`,
      template: `require_once('{{componentName}}/index.php');`,
    }

    action.push(updateFile)

    return action
  },
}