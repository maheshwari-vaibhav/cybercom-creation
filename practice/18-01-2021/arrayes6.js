// video - 4. Arrays in ES6  ES2015

const boxes = document.querySelectorAll('.box'); //it return nodelist
console.log(boxes); 

//ES5
/*
var arryBox5 = Array.prototype.slice.call(boxes);
console.log(arryBox5); 

arryBox5.forEach(function(el) {
    el.style.backgroundColor ='red';
});
*/

//ES6

Array.from(boxes).forEach(el => el.style.backgroundColor = 'blue'); 


/*
for (let i = 0; i < arryBox5.length; i++) {
    if (arryBox5[i].className === 'box blue') {
        continue;
    }
    arryBox5[i].textContent = "i changed to blue;"
    
}

*/


// for of loop

for (const el of Array.from(boxes)) {
    if (el.className.includes('blue')) {
        continue;
    }
    el.textContent = "i changed to blue;"

}

const ages = [10,22,18,17,9,21];

//ES5

var full = ages.map(function(el) {
    return el >=18;
})

console.log(full);
console.log(full.indexOf(true)); //find the index of true
console.log(ages[full.indexOf(true)]); // the the age which belongs to true


//ES6

console.log(ages.findIndex(el => el >= 18));

console.log(ages.find(el => el >= 18));

