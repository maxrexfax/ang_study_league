import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-login-register',
  templateUrl: './login-register.component.html',
  styleUrls: ['./login-register.component.scss']
})
export class LoginRegisterComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    
  }

  choice: string = 'login';

  onSelect(choiceIncome: string): void {
    this.choice = choiceIncome;
    console.log(choiceIncome, this.choice);
  }
}
