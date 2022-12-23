import { PlopGeneratorConfig } from "plop"
import { CreateFileProps, generatorHandler, UpdateFileProps } from "../../core/handles"

export default<PlopGeneratorConfig> {
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
    const templatePath = './modules/components/templates'

    const createFiles: CreateFileProps[] = [
      {
        path: `${basePath}/index.php`,
        templateFile: `${templatePath}/index.hbs`,
      },
      {
        path: `${basePath}/{{componentName}}.php`,
        templateFile: `${templatePath}/component.hbs`,
      },
      {
        path: `${basePath}/styles.scss`,
      }
    ]

    const updateFiles: UpdateFileProps[] = [
      {
        path: `${basePath}/../index.php`,
        template: `require_once('{{componentName}}/index.php');`,
      }
    ]

    return generatorHandler({createFiles, updateFiles})
  },
}