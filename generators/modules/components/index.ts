import { CreateFilesProps, generatorHandler, UpdateFileProps } from "../../core/handles"

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

    const createFiles: CreateFilesProps[] = [
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