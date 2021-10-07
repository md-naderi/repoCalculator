import React from 'react';
import reactDom from 'react-dom';
import './DesignButton.css'
import logo from './t.png';

class Button extends React.Component{
    constructor(props)
    {
        super(props);
        this.state=({
                text:this.props.buttonText
            })
    }
    sw =(p)=>{
        switch (p) {
            case '1':
                return(
                            <button class="button button--hyperion" onClick={this.op} style={{backgroundColor: this.props.backColor}} id='unselected' operationType={this.props.operationType}><span><span>{this.state.text}</span></span></button>
                        )
            case '2':
                return(//<div class="content__item">
                            <button class="button button--skoll"  onClick={this.op} style={{backgroundColor: this.props.backColor}} id='unselected' operationType={this.props.operationType}><span><span>{this.state.text}</span></span></button>
                        //</div>
                        )
            case '3':
                return(//<div class="content__item">
                            <button class="button button--greip" onClick={this.op} style={{backgroundColor: this.props.backColor}} id='unselected' operationType={this.props.operationType}><span><span>{this.state.text}</span></span></button>
                        //</div>
                        )
            case '4':
                return(//<div class="content__item">
                    <button class="button button--fenrir" onClick={this.op2} style={{backgroundColor: this.props.backColor}} id='unselected'>
                        <svg aria-hidden="true" class="progress" width="70" height="70" viewBox="0 0 70 70">
                            <path class="progress__circle" d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"></path>
                            <path class="progress__path" d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z" pathLength="1"></path>
                        </svg>
                        <span>{this.state.text}</span>
                    </button>
                //</div>
                )
            default:
                break;
        }
    }
    render(){
        return(
            this.sw(this.props.type)
        )
    }

    op = (e) =>{
        this.props.onCl(this.props.operationType) 
    }
    op2 = () =>{
        this.props.onCl() 
    }
}

export default Button
