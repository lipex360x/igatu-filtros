import { NodePlopAPI } from 'plop'
import components from './components'
import routes from './routes'

export default function (plop: NodePlopAPI) {
  plop.setGenerator('Component', components)
  plop.setGenerator('Route', routes)
}