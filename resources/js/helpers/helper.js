function saveLocalData(objName, data) {
    localStorage.setItem(objName, JSON.stringify(data));
}

function getLocalData(objName) {
    const data = localStorage.getItem(objName);
    return data == "undefined" ? undefined : JSON.parse(localStorage.getItem(objName));
}

function removeLocalData(objName) {
    localStorage.removeItem(objName);
}

function openLoginModal() {
    const user = $helper.getUser();
    if(user) {
        return true;
    }

    $('#loginModal').modal('toggle');
    return false;
}

function easyEncrypt(string) {
    return window.btoa(string) + "|==|";
}

function easyDecrypt(string) {
    string = string.replace('|==|', '');
    return window.atob(string);
}

function expectedPrice(amount) {
    return Math.round(parseFloat(amount)/0.7);
}
function getUser() {
    let user = $helper.getLocalData('__u');
    if(!user) return null;
    return JSON.parse($helper.easyDecrypt(user));
}
function checkForDummyUser() {
    const user = $helper.getUser();
    return (user && user.username === 'test');
}

function getTimeRemaining(endtime) {
    const total = Date.parse(endtime) - Date.parse(new Date());
    const seconds = Math.floor((total / 1000) % 60);
    const minutes = Math.floor((total / 1000 / 60) % 60);

    return {
        total,
        minutes,
        seconds
    };
}
function initializeClock(id, endtime, router) {

    const endtime_obj = timeConverter(endtime);
    const clock = document.getElementById(id);
    const minutesSpan = clock.querySelector('.minutes');
    const secondsSpan = clock.querySelector('.seconds');
    const user = getUser();
    if(!user)
    {
        minutesSpan.innerHTML = ('00');
        secondsSpan.innerHTML = ('00');
        return;
    }

    function updateClock() {
        const t = getTimeRemaining(endtime_obj);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.minutes === 0 && t.seconds === 0) {
            clearInterval(timeinterval);
            const deadline = new Date(Date.parse(new Date()) + 60 * 60 * 1000);
            // $helper.initializeClock('clockdiv', deadline.getTime(), router);
            $api.postData(`giveaway-reward`, {user: user.username})
                .then((response) => {
                    if(response.status === true) {
                        Swal.fire(
                            'Yaaay!',
                            response.message,
                            'success'
                        ).then(() => router.go());
                    } else {
                        router.go();
                    }
                });
        }
    }

    updateClock();
    const timeinterval = setInterval(updateClock, 1000);
}

function timeConverter(UNIX_timestamp){
    var a = new Date(UNIX_timestamp * 1000);
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    var year = a.getFullYear();
    var month = months[a.getMonth()];
    var date = a.getDate();
    var hour = a.getHours();
    var min = a.getMinutes();
    var sec = a.getSeconds();
    var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec ;
    return time;
}
function aesEncrypt (data) {
    data = JSON.stringify(data);
    const AES = require('crypto-js/aes');
    const PAD = require('crypto-js/pad-pkcs7');
    const CryptoJSCore = require('crypto-js/core');
    const enc = require('crypto-js/enc-utf8');
    const key = process.env.MIX_ENC_KEY;
    const iv = process.env.MIX_ENC_SALT;
    const cipher = AES.encrypt(data, enc.parse(key), {
        iv: enc.parse(iv),
        padding: PAD,
        mode: CryptoJSCore.mode.CBC
    });
    return cipher.toString();
}

export {
    saveLocalData,
    getLocalData,
    removeLocalData,
    openLoginModal,
    easyEncrypt,
    easyDecrypt,
    expectedPrice,
    checkForDummyUser,
    getUser,
    initializeClock,
    aesEncrypt
}