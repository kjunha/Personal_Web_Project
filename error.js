var a = 1;
var b = 0.000001;
var c = 0;
for(var i = 0; i < 1000000; i++) {
  a = a + b;
}
for(var i = 0; i < 1000000; i++) {
  c = c + b;
}
a = a - 1;
console.log(a);
console.log(c);
