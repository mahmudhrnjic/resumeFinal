            function calc()
            {
                var x = parseFloat(document.getElementById('x').value);
                var y = parseFloat(document.getElementById('y').value);
                
                var operator = document.getElementById('operators').value;
                
                if(operator === '+')
                {
                    document.getElementById('result').value = x+y;
                }
                
                if(operator === '-')
                {
                    document.getElementById('result').value = x-y;
                }
                
                if(operator === '/')
                {
                    document.getElementById('result').value = x/y;
                }
                
                if(operator === '*')
                {
                    document.getElementById('result').value = x*y;
                }
            }