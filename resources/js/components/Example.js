import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return (
          <div className="card card-primary card-outline">

                    <div className="card-body">

                      <a href="#" className="btn btn-primary">Yeni Firma Ekle</a>
                    </div>
                  </div>


    );
}

export default Example;

if (document.getElementById('card')) {
    ReactDOM.render(<Example />, document.getElementById('card'));
}
