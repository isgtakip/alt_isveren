import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return (

                         <button type="button" class="btn btn-block btn-primary">Primary</button>
            
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
