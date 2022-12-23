import { CreateFileProps, generatorHandler } from "../handles"

export default {
  description: 'New Plop Generator',

  prompts: [
    {
      type: 'input',
      name: 'moduleName',
      message: 'Module Name',
      validate: (value: string) => (!value ? 'Value is required' : true),
    },
    {
      when: (response: any) => (!!response.moduleName),
      type: 'list',
      name: 'projectType',
      message: 'Project Language',
      choices: () => [
        { name: 'TS: Node', value: 'ts-node.hbs' },
        { name: 'PHP', value: 'php.hbs' },
      ],
    },
  ],

  actions: () => {
    const basePath = '../generators/modules/{{moduleName}}'
    const templatePath = './core/generator/templates'

    const createFiles: CreateFileProps[] = [
      {
        path: `${basePath}/index.ts`,
        templateFile: `${templatePath}/{{projectType}}`,
        force: true
      },
      {
        path: `${basePath}/templates/index.hbs`,
        force: true
      }
    ]

    return generatorHandler({createFiles})
  },

}