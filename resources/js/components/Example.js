import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return (
          <div class="card card-primary card-outline">

                    <div class="card-body">

                      <a href="#" class="btn btn-primary">Yeni Firma Ekle</a>
                    </div>
                  </div>


    );
}

export default Example;

if (document.getElementById('card')) {
    ReactDOM.render(<Example />, document.getElementById('card'));
}
