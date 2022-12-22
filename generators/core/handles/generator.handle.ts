export type CreateFilesProps = {
  path: string
  templateFile?: string,
  force?: boolean
}

export type UpdateFileProps = {
  path: string
  template?: string
}

type GeneratorHandlerProps = {
  createFiles: CreateFilesProps[],
  updateFiles?: UpdateFileProps[],
}

export const generatorHandler = ({createFiles, updateFiles}: GeneratorHandlerProps) => {
  const actions = [] as any

  createFiles.forEach(({ path, templateFile, force = false }) => {
    const createFile = {
      type: 'add',
      path,
      templateFile,
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