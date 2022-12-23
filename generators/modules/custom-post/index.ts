import { CreateFileProps, generatorHandler, textTransformHandle, UpdateFileProps } from "../../core/handles";

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
    
    {
      type: 'input',
      name: 'slug',
      message: 'Slug',
      default: (response: any) => textTransformHandle.sanitize(response.pluralName),
      validate: (value: string) => (!value ? 'Value is required' : true),
    },

    {
      type: 'confirm',
      name: 'generateArchive',
      message: 'Generate Archive File?',
      default: true
    },

    {
      type: 'confirm',
      name: 'generateSingle',
      message: 'Generate Single File?',
      default: true
    },
  ],

  actions: (response: any) => {
    const slug = textTransformHandle.sanitize(response.slug)
    const basePath = `../src/custom-posts/${slug}`
    const templatePath = './modules/custom-post/templates/'

    const templateData = { className: slug, sanitizedSlug: slug }

    const createFiles: CreateFileProps[] = [
      {
        path: `${basePath}/index.php`,
        templateFile: `${templatePath}/index.hbs`,
        force: true,
      },

      {
        path: `${basePath}/register.php`,
        templateFile: `${templatePath}/register.hbs`,
        templateData,
        force: true,
      },

      {
        path: `${basePath}/queries.php`,
        templateFile: `${templatePath}/queries.hbs`,
        templateData,
        force: true,
      },

      {
        path: `${basePath}/../../../single-${slug}.php`,
        templateFile: `${templatePath}/single.hbs`,
        templateData,
        force: true,
      },

      {
        path: `${basePath}/../../../archive-${slug}.php`,
        templateFile: `${templatePath}/archive.hbs`,
        templateData,
        force: true,
      },
    ]

    const updateFiles: UpdateFileProps[] = [
      {
        path: `${basePath}/../index.php`,
        template: `require_once('${slug}/index.php');`,
      }
    ]

    return generatorHandler({createFiles, updateFiles});
  },
}