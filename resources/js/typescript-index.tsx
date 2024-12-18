// Define an interface for a User
// Interfaces in TypeScript are used to define the structure of an object.
interface User {
    id: number; // The user's ID, a number
    name: string; // The user's name, a string
    email: string; // The user's email, a string

    // A method to display user information
    displayInfo(): void;
}

// Create a class that implements the User interface
// Classes in TypeScript can implement interfaces to ensure they adhere to a specific structure.
class UserAccount implements User {
    id: number; // The user's ID
    name: string; // The user's name
    email: string; // The user's email

    // The constructor is used to initialize the properties of the class
    constructor(id: number, name: string, email: string) {
        this.id = id;
        this.name = name;
        this.email = email;
    }

    // Method to display user information
    // This method adheres to the displayInfo method defined in the User interface
    displayInfo(): void {
        console.log(`User ID: ${this.id}, Name: ${this.name}, Email: ${this.email}`);
    }
}

// Create a new user instance
// Here we create an instance of the UserAccount class
const user: User = new UserAccount(1, 'John Doe', 'john.doe@example.com');

// Display user information
// Call the displayInfo method to log the user's information to the console
user.displayInfo();

// Log a message to the console
// This is a simple log message to indicate that the TypeScript file has loaded successfully
console.log('Test TypeScript file loaded successfully.');

// Enums
// Enums allow you to define a set of named constants.
enum Direction {
    Up = 1,
    Down,
    Left,
    Right
}

let dir: Direction = Direction.Up;
console.log(dir); // Output: 1

// Generics
// Generics provide a way to create reusable components.
function identity<T>(arg: T): T {
    return arg;
}

let output = identity<string>("myString");
console.log(output); // Output: myString

// Type Aliases
// Type aliases create a new name for a type.
type Point = {
    x: number;
    y: number;
};

function printPoint(point: Point) {
    console.log(`x: ${point.x}, y: ${point.y}`);
}

printPoint({x: 10, y: 20});

// Union Types
// Union types allow a variable to be one of several types.
function printId(id: number | string) {
    console.log(`ID: ${id}`);
}

printId(101); // Output: ID: 101
printId("202"); // Output: ID: 202

// Intersection Types
// Intersection types combine multiple types into one.
interface Person {
    name: string;
}

interface Employee {
    employeeId: number;
}

type EmployeePerson = Person & Employee;

const emp: EmployeePerson = {name: "John", employeeId: 123};
console.log(emp);

// Type Assertions
// Type assertions tell the compiler to treat a value as a specific type.
let someValue: unknown = "this is a string";
let strLength: number = (someValue as string).length;
console.log(strLength); // Output: 16

// Modules
// Modules help organize code by splitting it into separate files.
export function add(a: number, b: number): number {
    return a + b;
}

console.log(add(2, 3)); // Output: 5
