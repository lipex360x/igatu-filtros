import { CreateFileProps, generatorHandler, textTransformHandle } from "../handles"

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

  actions: (response: any) => {
    const slug = textTransformHandle.sanitize(response.moduleName)
    const basePath = `../generators/modules/${slug}`
    const templatePath = './core/generator/templates'
    const templateData = { sanitizedSlug: slug }

    const createFiles: CreateFileProps[] = [
      {
        path: `${basePath}/index.ts`,
        templateFile: `${templatePath}/{{projectType}}`,
        templateData,
        force: true,
      },
      {
        path: `${basePath}/templates/index.hbs`,
        force: true
      }
    ]

    return generatorHandler({createFiles})
  },

}