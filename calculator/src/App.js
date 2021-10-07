import React from 'react';
import Header from "./Header.js"
import Container from './Container.js'
import './Design.module.css'

function App()
{
  return(
    <div className='container'>
      <Header/>
      <Container/>
      <h1>hello world</h1>
    </div>
  );
}

export default App;
