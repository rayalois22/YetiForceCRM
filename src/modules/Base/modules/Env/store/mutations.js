/* {[The file is published on the basis of YetiForce Public License 3.0 that can be found in the following directory: licenses/LicenseEN.txt or yetiforce.com]} */
import Objects from 'utilities/Objects.js'
export default {
  /**
   * Update env variables
   *
   * @param   {object}  state
   * @param   {object}  payload
   */
  update(state, payload) {
    state = Objects.mergeDeepReactive(state, payload)
  }
}