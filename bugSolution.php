function foo(a, b) {
  if (a === 0 || b === 0) {
    return a + b; //Corrected base case
  }
  if (a > 1000 || b > 1000){ //Handle large inputs to prevent stack overflow
    return foo(1000,1000);
  }
  return foo(a - 1, b - 1);
}