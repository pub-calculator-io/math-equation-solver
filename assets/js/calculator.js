function calculate(){

  // 1. init & validate
  let equation = input.get('math_equation').raw();
  if(!input.valid()) return;

  // 2. calculate
  let result;
  try{
    equation = equation.replaceAll(/[\{\[]/g,'(').replaceAll(/[\}\]]/g,')');
    equation = equation.replaceAll('root', 'nthRoot');
    result = calc(equation);
  }
  catch(error){
    input.exception('math_equation', error); return;
  }

  // 3. output
  _('result').innerHTML = result;
  
}