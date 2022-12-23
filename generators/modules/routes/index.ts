import { PlopGeneratorConfig } from "plop"
import { CreateFileProps, generatorHandler, UpdateFileProps } from "../../core/handles"

export default<PlopGeneratorConfig> {
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
    const templatePath = './modules/routes/templates'

    const createFiles: CreateFileProps[] = [
      {
        path: `${basePath}/{{componentName}}.route.php`,
        templateFile: `${templatePath}/route.hbs`,
      }
    ]

    const updateFiles: UpdateFileProps[] = [
      {
        path: `${basePath}/index.php`,
        template: `require_once('{{componentName}}.route.php');`,
      }
    ]

    return generatorHandler({createFiles, updateFiles});
  },
}