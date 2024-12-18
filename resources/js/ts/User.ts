// resources/js/ts/User.ts

// Define an interface for a User
export interface User {
    id: number;
    name: string;
    email: string;

    displayInfo(): void;
}

// Create a class that implements the User interface
export class UserAccount implements User {
    id: number;
    name: string;
    email: string;

    constructor(id: number, name: string, email: string) {
        this.id = id;
        this.name = name;
        this.email = email;
    }

    // Method to display user information
    displayInfo(): void {
        console.log(`User ID: ${this.id}, Name: ${this.name}, Email: ${this.email}`);
    }
}
