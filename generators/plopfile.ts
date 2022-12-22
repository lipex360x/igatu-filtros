import { NodePlopAPI } from 'plop'
import components from './modules/components'
import routes from './modules/routes'

export default function (plop: NodePlopAPI) {
  plop.setGenerator('Component', components)
  plop.setGenerator('Route', routes)
}