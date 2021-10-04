const { default: Axios } = require("axios");

class Status {
    static find(id) {
        return Axios.get('/statuses/' + id)
    }

    static all(then) {
        return Axios.get('/statuses')
        .then(({data}) => then(data))
        .catch(({err}) => then(err));
    }
}


export default Status;