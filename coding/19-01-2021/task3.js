const vaibhav = 
{
    name : 'Vaibhav',
    age : 23,
    email : 'info@vaibhavmaheshwari.com',
    number : '9558413998'
};
const renil = 
{
    name : 'Renil',
    age : 23,
    email : 'renilsoni52@gmail.com',
    number : '8200385941'
};
const rajan = 
{
    name : 'Rajan',
    age : 22,
    email : 'rajansoni1277@gmail.com',
    number : '9998423736'
};
const jay = 
{
    name : 'Jay',
    age : 21,
    email : 'jaykhatri1998@gmail.com',
    number : '979919288'
};
const data = [];
data.push(vaibhav);
data.push(renil);
data.push(rajan);
data.push(jay);


console.log(data);

data.sort((a,b) => a.name.localeCompare(b.name));

console.log(data);