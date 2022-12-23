import { NodePlopAPI } from 'plop'

import plopGenerator from './core/generator'
import customPostType from './modules/custom-post'
import components from './modules/components'
import routes from './modules/routes'

export default function (plop: NodePlopAPI) {
  plop.setGenerator('PlopGenerator', plopGenerator)
  plop.setGenerator('Custom Post Type', customPostType)
  plop.setGenerator('Component', components)
  plop.setGenerator('Route', routes)
}