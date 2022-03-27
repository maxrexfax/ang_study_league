import { Component, OnInit } from '@angular/core';

import {User} from '../user';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})
export class RegisterComponent implements OnInit {

  user: User = {
    id: 0,
    firstName: '',
    lastName: '',
    email: '',
    password: ''
  };

  firstNameValidation: boolean | undefined;

  constructor() {
    
   }

  ngOnInit(): void {
  }

  registerNewUser(): void {
    alert("Register here...");
    console.log(this.user);

}
}
