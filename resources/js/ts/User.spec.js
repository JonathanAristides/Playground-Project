import {describe, it, expect, vi} from 'vitest';
import {UserAccount} from './User';

describe('UserAccount', () => {
    it('should create a user with the given properties', () => {
        const user = new UserAccount(1, 'John Doe', 'john.doe@example.com');
        expect(user.id).toBe(1);
        expect(user.name).toBe('John Doe');
        expect(user.email).toBe('john.doe@example.com');
    });

    it('should display user information correctly', () => {
        const user = new UserAccount(1, 'John Doe', 'john.doe@example.com');
        const consoleSpy = vi.spyOn(console, 'log');
        user.displayInfo();
        expect(consoleSpy).toHaveBeenCalledWith('User ID: 1, Name: John Doe, Email: john.doe@example.com');
        consoleSpy.mockRestore();
    });
});
