import { NodePlopAPI } from 'plop'

import plopGenerator from './core/generator'
import customPostType from './modules/custom-post'
import components from './modules/components'
import routes from './modules/routes'
import svgIcon from './modules/svg-icon'
import templateParts from './modules/template-parts'

export default function (plop: NodePlopAPI) {
  plop.setGenerator('Custom Post Type', customPostType)
  plop.setGenerator('Component', components)
  plop.setGenerator('Template Parts', templateParts)
  plop.setGenerator('SVG Icon', svgIcon)
  plop.setGenerator('Route', routes)
  plop.setGenerator('Plop Generators', plopGenerator)
}