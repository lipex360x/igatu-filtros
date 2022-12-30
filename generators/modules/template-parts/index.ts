import { PlopGeneratorConfig } from "plop"
import { 
  CreateFileProps, 
  generatorHandler, 
  textTransformHandle, 
  UpdateFileProps 
} from "@gen/core/handles"

export default<PlopGeneratorConfig> {
  description: 'Generate template-parts',

  prompts: [
    {
      type: 'input',
      name: 'componentName',
      message: 'Template Part Name',
      validate: (value: string) => (!value ? 'Value is required' : true),
    },
  ],

  actions: (response: any) => {
    const slug = textTransformHandle.sanitize(response.componentName)
    const basePath = `../src/template-parts/${slug}`
    const templatePath = './modules/template-parts/templates'

    const templateData = { slug }

    const createFiles: CreateFileProps[] = [
      {
        path: `${basePath}/index.php`,
        templateFile: `${templatePath}/index.hbs`,
        templateData
      },
    ]

    const updateFiles: UpdateFileProps[] = [
      {
        path: `${basePath}/../index.php`,
        template: `require_once('/index.php');`,
      }
    ]

    return generatorHandler({createFiles, updateFiles})
  },
}