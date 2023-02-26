// Blog template v. 1.011
// By Michal Futera
// https://linktr.ee/mjfutera

const getData = async (url) => await fetch(url).then(r => r.json());

const buyMeaCoffee = async () => {
    const data = await getData('https://api.michalfutera.pro/buymeacoffee/');
    const  supporters = data['supporters'].map(e => e['supporter_name']).join(', ');
    document.getElementById('supportersBuyMeaCoffe').innerText = supporters;
    setTimeout(buyMeaCoffee, 10000);
}

window.onload = () => {
    buyMeaCoffee();
};
