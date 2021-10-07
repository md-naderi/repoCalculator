import React from 'react'
import Button from './Button';
import Inpute from './Inpute'
import './Design.module.css'
import axios from 'axios'


class Container extends React.Component{
    constructor(props)
    {
        super(props);
        this.state=({
                text1:'',
                text2:'',
                operation:''
            })
        this.inputRef = React.createRef();

    }

    render(){
        return(
            <>
            <div className='ButtonContainer' ref={this.inputRef}>
                
                <Button buttonText='+' type='1' backColor='' onCl={this.op} operationType='+' ></Button>
                <Button buttonText='-' type='2' backColor='' onCl={this.op} operationType='-' ></Button>
                <Button buttonText='×' type='3' backColor='' onCl={this.op} operationType='*' ></Button>
                <Button buttonText='÷' type='1' backColor='' onCl={this.op} operationType='/' ></Button>
                <Button buttonText='Solve' type='4' backColor='' onCl={this.handleSubmit}></Button>
            </div>
                <br/><br/>
                <Inpute id='inputText1' value={this.state.text1} onChange={this.changeHandler} hiddenText='Statment 1'></Inpute>
                <Inpute id='inputText2' value={this.state.text2} onChange={this.changeHandler} hiddenText='Statment 2'></Inpute>
                {
                    /*
                <button className={styles.button} onClick={this.op} operationType = '+'> Summation </button>
                <button className={styles.unselectedButton} onClick={this.op} operationType = '-'> Subtract </button>
                <button className={styles.unselectedButton} onClick={this.op} operationType = '*'> Multuply </button>
                <button className={styles.unselectedButton} onClick={this.op} operationType = '/'> Division </button>
                <button className={styles.unselectedButton} onClick={this.op} operationType = 'D'> Diffrential </button>
                <button className={styles.unselectedButton} onClick={this.op} operationType = 'J'> جایگذاری </button>
                <br/><br/>
                <input type='text' id='inputText1' value={this.state.text1} onChange={this.changeHandler}/>
                <input type='text' id='inputText2' value={this.state.text2} onChange={this.changeHandler}/>
                <button onClick={this.handleSubmit}>Solve</button>
                */}
            </>
        )
    }
    op = (e) =>{
        // this.setState({operation : e.target.getAttribute('operationType')})
        this.setState({operation : e})
         /*
        this.inputRef.current.childNodes.forEach(element => {
            if(element.id == 'selected')
             {
                 element.id = 'unselected';
                 element.backColor = '';
             }
             console.log(element.getAttribute('id'))
             if(element.operationType == e)
             {
                console.log('yesss')
                element.id = 'selected';
                element.backColor = 'red';
             }
         });
         */
         //e.target.className = 'selectedButton';
         //e.target.backColor = 'crimson'; 
    }
    changeHandler = (e) =>{
        if(e.target.id == 'inputText1')
            this.setState({text1 : e.target.value})
        else
            this.setState({text2 : e.target.value})
    }
    handleSubmit = () =>
    {
        console.log(this.state)
        
        axios.post('URL',this.state)
        .then(response => console.log(response))
        .catch(error => console.log(error))
        
        this.setState({text1 : ''})
        this.setState({text2 : ''})
    }
    errorCheck = () =>
    {
        // this.state.text1
    }
}

export default Container