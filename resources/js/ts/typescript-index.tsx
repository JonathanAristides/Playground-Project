import {User, UserAccount} from './User';

// Create a new user instance
// Here we create an instance of the UserAccount class
const user: User = new UserAccount(1, 'John Doe', 'john.doe@example.com');

// Display user information
// Call the displayInfo method to log the user's information to the console
user.displayInfo();

// Log a message to the console
// This is a simple log message to indicate that the TypeScript file has loaded successfully
console.log('Test TypeScript file loaded successfully.');
//
// // Enums allow you to define a set of named constants.
// enum Direction {
//     Up = 1,
//     Down,
//     Left,
//     Right
// }
//
// let dir: Direction = Direction.Up;
// console.log(dir); // Output: 1
//
// // Generics provide a way to create reusable components.
// function identity<T>(arg: T): T {
//     return arg;
// }
//
// let output = identity<string>("myString");
// console.log(output); // Output: myString
//
// // Type aliases create a new name for a type.
// type Point = {
//     x: number;
//     y: number;
// };
//
// function printPoint(point: Point) {
//     console.log(`x: ${point.x}, y: ${point.y}`);
// }
//
// printPoint({x: 10, y: 20});
//
// // Union types allow a variable to be one of several types.
// function printId(id: number | string) {
//     console.log(`ID: ${id}`);
// }
//
// printId(101); // Output: ID: 101
// printId("202"); // Output: ID: 202
//
// // Intersection types combine multiple types into one.
// interface Person {
//     name: string;
// }
//
// interface Employee {
//     employeeId: number;
// }
//
// type EmployeePerson = Person & Employee;
//
// const emp: EmployeePerson = {name: "John", employeeId: 123};
// console.log(emp);
//
// // Type assertions tell the compiler to treat a value as a specific type.
// let someValue: unknown = "this is a string";
// let strLength: number = (someValue as string).length;
// console.log(strLength); // Output: 16
//
// // Modules
// // Modules help organize code by splitting it into separate files.
// export function add(a: number, b: number): number {
//     return a + b;
// }
//
// console.log(add(2, 3)); // Output: 5
