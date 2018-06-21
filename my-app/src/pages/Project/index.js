import React, {Component} from 'react'
import './style.css'
import {Link} from 'react-router-dom'
import site from '../../site.png'

class Project extends Component {
    render () {
        return (
        	<div className="Project">
                <h1><b>Project</b></h1>
                <hr/>
                <div className="img">
                	<a href="http://rita-zimina.000webhostapp.com/"><img src={site} class="image"/></a>
                </div>
            </div>
        )
    }
}

export default Project