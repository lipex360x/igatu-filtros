export default {
  description: 'Generate Route',

  prompts: [
    {
      type: 'input',
      name: 'componentName',
      message: 'route',
      validate: (value: string) => (!value ? 'Value is required' : true),
    },

    {
      type: 'list',
      name: 'httpMethod',
      message: 'HTTP Method',
      choices: () => [
        { name: 'GET', value: 'READABLE' },
        { name: 'POST', value: 'CREATABLE' },
        { name: 'PUT', value: 'EDITABLE' },
        { name: 'DELETE', value: 'DELETABLE' },
      ],
    },    
  ],

  actions: () => {
    const basePath = '../src/routes'
    const templatePath = './routes/templates'

    const setFiles = () => {
      const files = []
      
      files.push({
        type: 'add',
        path: `${basePath}/{{componentName}}.route.php`,
        templateFile: `${templatePath}/route.hbs`,
      })

      return files
    }

    const action = [] as any

    setFiles().forEach(({ path, templateFile }) => {
      const createFile = {
        type: 'add',
        path,
        templateFile,
        force: false,
      }

      action.push(createFile)
    })

    const updateFile = {
      type: 'append',
      path: `${basePath}/index.php`,
      template: `require_once('{{componentName}}.route.php');`,
    }

    action.push(updateFile)

    return action
  },
}