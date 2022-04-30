var BASE_URL = '';
const API_ENDPOINT= '/api';
let headers = new Headers();
headers.set('Accept', 'application/json');
headers.set('PLATFORM', 'WEB');

const timestamp = new Date().getTime();
const token = $helper.aesEncrypt(timestamp);
headers.set('token', token);
headers.set('timestamp', `${timestamp}`);

function getData(endpoint) {
    BASE_URL = API_ENDPOINT + '/' + endpoint;

    return new Promise((resolve, reject) => {
        fetch(BASE_URL, {
            method: 'GET',
            headers: headers
        })
            .then((response) => response.json())
            .then((res) => {
                resolve(res);
            })
            .catch((error) => {
                reject(error);
            });
    });
}

/**
 * @param endpoint
 * @param payload
 * @param method
 * @returns {Promise<any>}
 */
function postData(endpoint, payload, method) {
    BASE_URL = API_ENDPOINT + '/' + endpoint;

    if (!method)
        method = 'POST';

    return new Promise((resolve, reject) => {
        fetch(BASE_URL, {
            method: 'POST',
            headers: headers,
            body: payload,
            redirect: 'follow'
        })
            .then((response) => response.json())
            .then((res) => {
                resolve(res);
            })
            .catch((error) => {
                reject(error);
            });
    });
}

export {getData, postData};
