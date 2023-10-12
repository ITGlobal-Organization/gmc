import axios from "axios";

axios.defaults.headers.common = setHeaders();


export const axiosWrapper = {
    get,
    post,
    put,
    destroy
}

function get(url, data) {
    return axios.get(url, {
        params: data
    });
}

function post(url, data, headers = {}) {
    if (Object.keys(headers) > 0)
        return axios.post(url, data, { headers });
    else
        return axios.post(url, data);
}

function put(url, data) {
    return axios.put(url, data);
}

function destroy(url) {
    return axios.delete(url);
}

function setHeaders(){
    let token = localStorage.getItem('token');
    let headers = {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        'Content-Type': 'multipart/form-data'
    };
    if(token){
        headers['Authorization'] = `Bearer ${token}`;
    }

    return headers;

}
