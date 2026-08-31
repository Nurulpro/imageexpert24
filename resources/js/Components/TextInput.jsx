import { forwardRef } from 'react';

export default forwardRef(function TextInput({ type = 'text', className = '', isFocused = false, ...props }, ref) {
    return (
        <input
            {...props}
            type={type}
            className={'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm ' + className}
            ref={ref}
            autoFocus={isFocused}
        />
    );
});
