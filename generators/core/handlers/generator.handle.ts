export type CreateFileProps = {
  path: string
  templateFile?: string,
  templateData?: any,
  force?: boolean
}

export type UpdateFileProps = {
  path: string
  template?: string
}

type GeneratorHandlerProps = {
  createFiles: CreateFileProps[],
  updateFiles?: UpdateFileProps[],
}

export const generatorHandler = ({createFiles, updateFiles}: GeneratorHandlerProps) => {
  const actions = [] as any

  createFiles.forEach(({ path, templateFile, templateData, force = false, }) => {
    const createFile = {
      type: 'add',
      path,
      templateFile,
      data: templateData,
      force,
    }

    actions.push(createFile)
  })

  updateFiles?.forEach(({ path, template }) => {
    const createFile = {
      type: 'append',
      path,
      template,
    }

    actions.push(createFile)
  })

  return actions
}