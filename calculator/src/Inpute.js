import React from 'react';
import reactDom from 'react-dom';
// import './DesignButton.css'
// import './ContactFrom_v10/vendor/bootstrap/css/bootstrap.min.css'
// import './ContactFrom_v10/fonts/font-awesome-4.7.0/css/font-awesome.min.css'
// import './ContactFrom_v10/vendor/animate/animate.css'
// import './ContactFrom_v10/vendor/css-hamburgers/hamburgers.min.css'
// import './ContactFrom_v10/vendor/animsition/css/animsition.min.css'
// import './ContactFrom_v10/vendor/select2/select2.min.css'
// import './ContactFrom_v10/vendor/daterangepicker/daterangepicker.css'
// import './ContactFrom_v10/css/util.css'
import './ContactFrom_v10/css/main.css'

class Inpute extends React.Component{
    constructor(props)
    {
        super(props);
        this.state=({
                //text:this.props.buttonText
            })
    }
    render(){
        return(
            //<div class="wrap-input100 validate-input" data-validate="Please enter your name">
            <div class="wrap-input100 validate-input">
                <input id={this.props.id} class="input100" type="text" name="name" value={this.props.value} onChange={this.props.onChange} placeholder={this.props.hiddenText}/>
                <span class="focus-input100"></span>
            </div>
        )
    }
    onChange = (e) =>{
        this.props.onChange(e);
    }
}

export default Inpute
