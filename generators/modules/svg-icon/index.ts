import { PlopGeneratorConfig } from "plop"
import { CreateFileProps, generatorHandler, UpdateFileProps } from "../../core/handlers"

export default<PlopGeneratorConfig> {
  description: 'Generate SVGIcon',

  prompts: [
    {
      type: 'input',
      name: 'componentName',
      message: 'Icon Name',
      validate: (value: string) => (!value ? 'Value is required' : true),
    },
  ],

  actions: () => {
    const basePath = '../src/assets/icons'
    const templatePath = './modules/svgicon/templates'

    const createFiles: CreateFileProps[] = [
      {
        path: `${basePath}/{{componentName}}Icon.php`,
        templateFile: `${templatePath}/index.hbs`,
      },
    ]

    const updateFiles: UpdateFileProps[] = [
      {
        path: `${basePath}/index.php`,
        template: `require_once('{{componentName}}Icon.php');`,
      }
    ]

    return generatorHandler({createFiles, updateFiles})
  },
}