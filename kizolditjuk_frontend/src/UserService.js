import axios from 'axios'

const API_URL = 'http://localhost:8000/api/'

class UserService {

  getData(api) {
    return axios.get(API_URL + api).then(response => response.data)
  }

  postData(api, data) {
    return axios.post(API_URL + api, data)
  }

}

export default new UserService();