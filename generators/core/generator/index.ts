import { CreateFilesProps, generatorHandler } from "../handles"

export default {
  description: 'New Plop Generator',

  prompts: [
    {
      type: 'input',
      name: 'moduleName',
      message: 'Module Name',
      validate: (value: string) => (!value ? 'Value is required' : true),
    },
  ],

  actions: () => {
    const basePath = '../generators/modules/{{moduleName}}'
    const templatePath = './core/generator/templates'

    const createFiles: CreateFilesProps[] = [
      {
        path: `${basePath}/index.ts`,
        templateFile: `${templatePath}/index.hbs`,
      }
    ]

    return generatorHandler({createFiles})
  },

}