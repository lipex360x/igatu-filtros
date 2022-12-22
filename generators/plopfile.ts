import { NodePlopAPI } from 'plop'

import plopGenerator from './core/generator'
import components from './modules/components'
import routes from './modules/routes'

export default function (plop: NodePlopAPI) {
  plop.setGenerator('PlopGenerator', plopGenerator)
  plop.setGenerator('Component', components)
  plop.setGenerator('Route', routes)
}