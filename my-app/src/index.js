import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import registerServiceWorker from './registerServiceWorker';
import { BrowserRouter as Router} from 'react-router-dom';

ReactDOM.render(
    
        <Router>
        	<div className="ldt-blur-in">
		        <div className="Block1" >
	                <App />
	            </div>
            </div>
        </Router>
    ,document.getElementById('root')
);

