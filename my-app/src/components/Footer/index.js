import React, {Component} from 'react'
import {Link} from 'react-router-dom'
import logo from '../../img.jpg'
import './style.css'

class Footer extends Component {
    render () {
        return (
            <div className="footer">
                <div className="text">
                	<b>Dvorovoi Maxim</b>
                </div>
                <div className="git">
                	<a href="https://github.com/vmolo4nik/phpacademy"><button class="button">Visit my Git</button></a>
                </div>
                <img src={logo} />

            </div>
        )
    }
}

export default Footer
