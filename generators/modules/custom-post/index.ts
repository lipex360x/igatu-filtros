export default {
  description: 'Generate Custom Post Type',

  prompts: [
    {
      type: 'input',
      name: 'singularName',
      message: 'Singular Name',
      validate: (value: string) => (!value ? 'Value is required' : true),
    },
    
    {
      type: 'input',
      name: 'pluralName',
      message: 'Plural Name',
      validate: (value: string) => (!value ? 'Value is required' : true),
    }, 
  ],

  actions: () => {
    const basePath = '../'
    const templatePath = './custom-post/templates'

    const setFiles = () => {
      const files = []
      // TODO: Montar plop para CPT
      files.push({
        type: 'add',
        path: `${basePath}/index.php`,
        templateFile: `${templatePath}/index.hbs`,
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