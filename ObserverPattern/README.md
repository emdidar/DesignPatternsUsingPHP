# Observer

# Purpose
To implement a publish/subscribe behavior to an object, whenever a "Subject" object changes its state, the attached "Observers" will be notified. It is used to shorten the amount of coupled objects and uses loose coupling instead.

# Examples
a message queue system is observed to show the progress of a job in a GUI

# Note
PHP already defines two interfaces that can help to implement this pattern: SplObserver and SplSubject.