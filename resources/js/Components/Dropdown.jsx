import { useState, useRef, useEffect } from 'react';

export default function Dropdown({ trigger, children, align = 'right' }) {
    const [open, setOpen] = useState(false);
    const ref = useRef(null);

    useEffect(() => {
        function handleClickOutside(e) {
            if (ref.current && !ref.current.contains(e.target)) {
                setOpen(false);
            }
        }
        document.addEventListener('mousedown', handleClickOutside);
        return () => document.removeEventListener('mousedown', handleClickOutside);
    }, []);

    return (
        <div className="relative" ref={ref}>
            <div onClick={() => setOpen((o) => !o)}>{trigger}</div>

            {open && (
                <div
                    className={`absolute z-50 mt-2 w-48 rounded-md shadow-lg ${
                        align === 'right' ? 'right-0' : 'left-0'
                    }`}
                    onClick={() => setOpen(false)}
                >
                    <div className="rounded-md ring-1 ring-black ring-opacity-5 bg-white py-1">
                        {children}
                    </div>
                </div>
            )}
        </div>
    );
}
