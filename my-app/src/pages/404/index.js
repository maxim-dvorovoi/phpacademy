import React, {Component} from 'react'
import './style.css'
import {Link} from 'react-router-dom'
import error from '../../error.png'

class NotFound extends Component {
    render () {
        return (
        	<div className="Error">
                <h1><b>Oops Error: Not Found</b></h1>
                <hr/>
                <img src={error} />
            </div>
        )
    }
}

export default NotFound