import React, {Component} from 'react'
import './style.css'
import {Link} from 'react-router-dom'
import gmail from '../../gmail.png'
import facebook from '../../facebook.png'

class Contact extends Component {
    render () {
        return (
        	<div className="Contact">
                <h1><b>Contact</b></h1>
                <hr/><br/><br/><br/><br/>
                <div>    
	            <img src={gmail}/><h2>&nbsp;   e-mail: <a href="mailto:vmolo4nik@gmail.com">vmolo4nik@gmail.com</a><br/><br/></h2>
	            <img src={facebook}/><h2>&nbsp;  facebook: <a href="https://www.facebook.com/maxim.dvorovoy">maxim.dvorovoy</a><br/></h2>	               
                </div>
            </div>
        )
    }
}

export default Contact