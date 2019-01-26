const express = require('express');
const bodyParser = require('body-parser');
const morgan = require('morgan');
const qs = require('qs');

const app = express();
app.use(morgan('tiny'));

// schema:
// {name: string,
//  location:
//  contact-info:
//  experience: Integer (in years)
//  age: Integer
//  skills: [string]
//  }
let people = [{
  name: 'test',
  location: 'jail',
  contactInfo: 'gmail@yahoo.com',
  experience: -1,
  age: 200,
  skills: ['coding', 'cad', 'cement'],
}];


app.use(bodyParser.urlencoded({ extended: true}));

app.get('/', (req, res) => {
  res.send('<h1>Hello, World!</h1>');
});


app.get('/people', (req, res) => {
  res.send(people);
});


app.post('/people', (req, res) => {
  people.push(req.body);
  res.send(201);
});

//app.all('/people', (req, res) => {
//  res.sendStatus(500);
//});


const PORT = 5000;
app.listen(PORT, () => console.log(`Server started on port ${PORT}`));


