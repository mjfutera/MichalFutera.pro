// Blog template v. 1.012
// By Michal Futera
// https://linktr.ee/mjfutera

const getNewData = async (url) => await fetch(url).then(r => r.json());

const buyMeaCoffee = async () => {
    const data = await getNewData('https://api.michalfutera.pro/buymeacoffee/');
    const  supporters = data['supporters'].map(e => e['supporter_name']).join(', ');
    console.log(supporters);
    document.getElementById('supportersBuyMeaCoffe').innerText = supporters;
    setTimeout(buyMeaCoffee, 300000);
}

window.onload = () => {
    buyMeaCoffee();
};
