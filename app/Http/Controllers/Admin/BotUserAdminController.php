<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BotUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BotUserAdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user || !$user->isAdmin) {
            abort(404);
        }

        $users = BotUser::paginate();

        return view('admin.bot_users', compact('users'));
    }

    public function updateBalance(Request $request)
    {
        try {
            $userId = $request->input('user');
            $amount = $request->input('amount');

            $user = Auth::user();

            if (!$user || !$user->isAdmin) {
                abort(404);
            }

            // Обновление поля balance пользователя
            $user = BotUser::findOrFail($userId);
            $user->balance += $amount;
            $user->save();

            // Возвращение результата или редирект
            // ...

            return redirect()->route('admin.bot_users')->with('success', 'Balance пользователя успешно обновлен.');
        } catch (QueryException $e) {
            // Обработка ошибки запроса
            $errorCode = $e->getCode();
            $errorMessage = $e->getMessage();

            // Дополнительная логика обработки ошибки

            // Пример вывода сообщения об ошибке
            return back()->withError('Произошла ошибка при сохранении данных: ' . $errorMessage);
        } catch (\Exception $e) {
            // Общая обработка других исключений
            // ...

            // Пример вывода сообщения об ошибке
            return back()->withError('Произошла ошибка: ' . $e->getMessage());
        }
    }
    public function updateProcessing(Request $request)
    {
        try {
            $userId = $request->input('user');

            $user = Auth::user();

            if (!$user || !$user->isAdmin) {
                abort(404);
            }

            // Обновление поля balance пользователя
            $user = BotUser::findOrFail($userId);
            $user->processing = 0;
            $user->save();

            return redirect()->route('admin.bot_users')->with('success', 'Processing пользователя успешно сброшен.');
        } catch (QueryException $e) {
            // Обработка ошибки запроса
            $errorCode = $e->getCode();
            $errorMessage = $e->getMessage();

            // Дополнительная логика обработки ошибки

            // Пример вывода сообщения об ошибке
            return back()->withError('Произошла ошибка при сохранении данных: ' . $errorMessage);
        } catch (\Exception $e) {
            // Общая обработка других исключений
            // ...

            // Пример вывода сообщения об ошибке
            return back()->withError('Произошла ошибка: ' . $e->getMessage());
        }
    }

}
